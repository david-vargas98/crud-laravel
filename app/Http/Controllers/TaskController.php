<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //En esta variable se va a almacenar todos los registros de tareas en orden descendente (último al primero)
        $tasks = Task::latest()->paginate(3); //Y esto se pasa a la vista index:
        return view("index", compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //Este método se usa para mostrar la vista del formulario que se usará para crear
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //Validaciones, lo que venga en la $request se quiere que se valide con las siguientes reglas:
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        //Aquí es donde se implementa la lógica para crear en la base de datos
        Task::create($request->all()); //Se crea el registro mediante asignación masiva (Massive asignment)
        return redirect()->route("tasks.index")->with('success', 'Nueva tarea creada exitosamente'); //Se redirige al index 
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
