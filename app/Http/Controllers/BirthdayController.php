<?php

namespace App\Http\Controllers;
use App\Models\Birthday;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controllers\HasMiddleware;
// use Illuminate\Routing\Controllers\Middleware;

class BirthdayController extends Controller /*implements HasMiddleware*/
{
    // public static function middleware()
    // {
    //     return [
    //         new Middleware('auth:sanctum', except: ['index', 'show']),
    //     ];
    // }

    public function index()
    {
        return Birthday::all();
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name'    => ['required', 'max:255'],
            'author'  => ['required', 'max:255'],
            'context' => ['required', 'max:255'],
        ]);

        $birthday = Birthday::create($fields);

        return $birthday;
    }

    public function show(Birthday $birthday)
    {
        return $birthday;
    }

    public function update(Request $request, Birthday $birthday)
    {
        // Gate::authorize('modify', $birthday);
        
        $fields = $request->validate([
            'name'    => ['required', 'max:255'],
            'author'  => ['required', 'max:255'],
            'context' => ['required', 'max:255'],
        ]);

        $birthday->update($fields);

        return $birthday;
    }

    public function destroy(Birthday $birthday)
    {
        // Gate::authorize('modify', $birthday);
        
        $birthday->delete();

        return ['message' => 'The birthday was deleted!'];
    }
}
