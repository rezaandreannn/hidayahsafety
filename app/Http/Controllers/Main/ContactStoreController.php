<?php

namespace App\Http\Controllers\Main;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactStoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ContactRequest $request)
    {
        $data = $request->validated();

        Message::create($data);

        return redirect()->back()->with('success', 'Thanks !');
    }
}
