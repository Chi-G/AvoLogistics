<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;


class ContactsController extends Controller
{
    /**
     * Display a listing of the messages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all messages from the database
        $contacts = Contacts::all();

        // Pass the messages to the view
        return view('admin.contacts.contact_index', compact('contacts'));
    }

    public function destroy($id)
    {
        $team = Contacts::find($id);
        $team->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
