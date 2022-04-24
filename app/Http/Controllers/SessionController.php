<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSessionRequest;
use App\Models\Session;
use App\Schoolmanagement\Service\Sessions\SessionService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class SessionController extends Controller
{

    public function index(): View
    {
        return view('admins.sessions.index', ['sessions' => Session::get()]);
    }


    public function create(): View
    {
        return view('admins.sessions.create');
    }


    public function store(StoreSessionRequest $request , SessionService $sessionService): RedirectResponse
    {
        $sessionService->storeSessionData(new  Session(), $request);
        return redirect()->route('sessions.index')->with('success','Sessions has been added successfully');
    }


    public function show(Session $session): View
    {
        return view('admins.sessions.show', compact('session'));
    }

    public function edit(Session $session): View
    {
        return view('admins.sessions.edit', compact('session'));
    }


    public function update(Request $request, Session $session): RedirectResponse
    {
        return redirect()->route('sessions.index');
    }


    public function destroy(Session $session, SessionService  $sessionService): RedirectResponse
    {
    $sessionService->deleteSessionData($session);
        return redirect()->route('sessions.index')->with('success','Sessions has been deleted successfully');
    }
}
