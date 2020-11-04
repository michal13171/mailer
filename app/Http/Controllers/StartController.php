<?php

namespace App\Http\Controllers;

use App\Mail\DeleteUser;
use App\Mail\UserRegister;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StartController extends Controller
{
    /**
     * @return View
     */
    public function info(): View
    {
        return \view('info');
    }

    public function activ($id)
    {
        $user = User::find($id);
        $user->active = 1;
        $user->save();

        return redirect()->route('success');
    }

    public function success(): View
    {
        return \view('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $user = User::find($id);
        Mail::to($user->email)->send(new DeleteUser());

        $user->delete();

        return redirect('/');
    }
}
