<?php
namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{

    public function index(){
       return view('todos.todos')->with('todos',Todo::all());

    }

    public function show($todosId){
              $todos = Todo::find($todosId);
              return view('todos.show')->with('todo', Todo::find($todosId));
    }

    public function create(){
       return view('todos.create');

       }

       public function store(){
          $this->validate(request(),[
              'name'=>'required|min:6|max|12',
              'description'=>'required'
           
          
          ]);



            $data = request()->all();
              $todo = new Todo();
               $todo->name = $data['name'];
                $todo->description = $data['description'];
                  $todo->completed = false;

                  $todo->save();
                  return redirect('/todos');
       }

      public function edit($todoId){
                $todo = Todo::find($todoId);
                return view('todos.edit')->with('todo', $todo);

      }

      public function update($todoId){
            $data = request()->all();
            $todo = Todo::find($todoId);
            $todo->name = $data['name'];
            $todo->description = $data['description'];
            $todo->save();
            return redirect('/todos');
      }

      public function destroy($todoId){
         $todo = Todo::find($todoId);
            $todo->delete();
             return redirect('/todos');
      }

}
