<?php

namespace App\Livewire;

use App\Exports\CuerpoExport;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Cuerpos;
use App\Models\tipos_de_hechos;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectDropdownFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Maatwebsite\Excel\Facades\Excel;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;

class CuerpoTable extends DataTableComponent
{
    public $buttons = ["Delete"];
    public $cuerpos;

    public $title = "Eliminar Expediente";
    public $content = "Quieres Eliminar?";

    public $openModal = false;
    protected $model = Cuerpos::class;
    
    public $item_id = 0; //sirve para eliminar el cuerpo.....

    public $hideButtons = false;
    //public ?int $searchFilterDebounce = 600;
    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPerPageAccepted([5, 10, 25, 50, 100, -1]);
        $this->setPerPage(5);

        $this->setBulkActions([
            'exportSelected' => 'Exportar',
           // 'deleteSelected' => 'Eliminar'
        ]);
    }


    public function filters(): array
    {
        return [
            SelectFilter::make('Identificado')
                ->options([
                    '' => 'Todos',
                    'si' => 'Si',
                    'no' => 'No',
                ])
                ->filter(function ($query, $value) {
                    if ($value != '') {
                        $query->where('identificado', $value);
                    }
                }),
            
                DateFilter::make('Desde')
            ->filter(function($query, $value){
                $query->whereDate('cuerpos.fecha', '>=', $value);
            }),
            DateFilter::make('Hasta')
            ->filter(function($query, $value){
                $query->whereDate('cuerpos.fecha', '<=', $value);
            }),

            SelectFilter::make('Sexo')
                ->options([
                    '' => 'Todos',
                    'hombre' => 'Hombre',
                    'mujer' => 'Mujer',
                    'indefenido' => 'Indefenido'
                ])
                ->filter(function ($query, $value) {
                    if ($value != '') {
                        $query->where('sexo', $value);
                    }
                }),

            MultiSelectDropdownFilter::make('Tipo de Hecho')
                ->options(
                    tipos_de_hechos::query()
                        ->orderBy('descripcion')
                        ->get()
                        ->keyBy('id')
                        ->map(fn ($descripcion) => $descripcion->descripcion)
                        ->toArray()
                )
                ->setFirstOption('Todos')
                ->filter(function (Builder  $builder, array $value) {
                    $builder->whereHas('tipos_de_hechos', fn ($query) => $query->whereIn('tiposdehechos_id', $value));
                })
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
                Column::make("CI", "CI")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
                Column::make("Identificado", "identificado")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
                Column::make("Fecha", "fecha")
                    ->searchable()
                    ->collapseOnTablet()
                    ->format(
                        fn ($value) => Carbon::createFromFormat('Y-n-d', $value)->format("d/m/Y")
                    ),
                Column::make("Nombre", "nombre",)
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Apellido Paterno", "apellidop")
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Apellido Materno", "apellidom")
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Sexo", "sexo")
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Tipos de hechos", "tipos_de_hechos.descripcion")
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Edad", "edad")
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Edad II", "edad2")
                ->searchable()
                ->collapseOnTablet(),

            ButtonGroupColumn::make('Acciones')
                ->buttons([
                    LinkColumn::make('Acciones')
                        ->title(fn ($row) => 'Editar')
                        ->location(fn ($row) => route('Cuerpos.edit', $row))
                        ->attributes(fn () => [
                            'class' => 'btn btn-green'
                        ]),

                    LinkColumn::make('Acciones')
                        ->title(fn ($row) => 'Vista')
                        ->location(fn ($row) => route('Cuerpos.show', $row))
                        ->attributes(fn () => [
                            'class' => 'btn btn-gray'
                        ]),
                        

                    ]),
            Column::make('ELIMINAR')
            ->label(fn ($row, Column $column) => view('livewire.delete')->with(["id" => $row->id, "description" => $row->name . " " . $row->lastname]))
            ->hideIf($this->hideButtons),
        ];
    }
    public function confirmDestroy($id, $description)
    {
        $this->content = '¿Estas seguro de querer eliminarlo ' . $description . '?';
        $this->item_id = $id;
        $this->openModal = true;
    }

    
    public function doDelete(){
        //1.- seleccionar el cuerpo (saber el id, y tener la variable que tiene modelo)
        $cuerpos = Cuerpos::find($this->item_id);
 //   2.- eliminar fotos  
        $cuerpos->imagenes()->each(function($photo) {
    
             Storage::disk("local")->delete("fotos/" . $photo->photoname);
             $photo->delete(); // <-- direct deletion
             });
   // 3.- eliminar los dictamenes
        $cuerpos->cuerpos_dictamenes()->each(function($dictamen) {
        Storage::disk("local")->delete("fotos/" . $dictamen->dictamenes);
        $dictamen->delete(); // <-- direct deletion
             });
// borrar fotos fisicas
        $cuerpos->delete();


    }




    public function exportSelected()
    {

        $cuerpos = Cuerpos::whereIn('id', $this->getSelected())->get();
        $this->clearSelected();
        return Excel::download(new CuerpoExport($cuerpos), 'Cuerpo.xlsx');
    }

    public function deleteSelected(){
       Cuerpos::whereIn('id', $this->getSelected())->delete();
       $this->clearSelected();
    }
    public function customView(): string
    {
        return 'components.destroy';
    }

}
