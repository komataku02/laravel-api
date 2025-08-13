<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\ContactResource;

class ContactController extends Controller
{
    //一覧(ページング)
    public function index(Request $request)
    {
        $perPage = (int)($request->get('per_page', 10));
        $contacts = Contact::orderByDesc('id')->paginate($perPage);

        return ContactResource::collection($contacts)
        ->additional(['message' => 'OK']);//任意のメタ情報
    }

    //作成
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return (new ContactResource($contact))
        ->additional(['message' => 'Created']
        )->response()->setStatusCode(201);
    }

    //1件取得(必要なら)
    public function show(Contact $contact)
    {
        return (new ContactResource($contact))
        ->additional(['message' => 'OK']);
    }

    //更新
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return (new ContactResource($contact))
        ->additional(['message' => 'Updated']);
    }

    //削除
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
