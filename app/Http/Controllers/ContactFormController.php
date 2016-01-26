<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller,
	Input,
	Validator,
	Mail,
	Redirect,
	App\ContactForm as ContactForm,
	Illuminate\Database\Eloquent\Model,
	App\Models\Page,
	Illuminate\Support\Facades\View;

class ContactFormController extends Controller {

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 * @todo Send an email to the email address in the env files
	 */
	public function store()
	{
		// get all inputs
		$input = Input::all();

		// validate data
		$rules = [
			'name' => 'required',
			'email' => 'required|email',
			'query' => 'required',
			'phone' => 'digits_between:4,15'
		];

		$validator = Validator::make($input, $rules);

		if($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator);
		}

		// instantiate the contact_form
		$contact_form = new ContactForm();

		// apply the values to the contact_form object
		$contact_form->name = $input['name'];
		$contact_form->email = $input['email'];
		$contact_form->phone = $input['phone'];
		$contact_form->query = $input['query'];
		$contact_form->year = date('Y');

		Mail::send('emails.enquiry', ['user' => $contact_form], function ($m) use ($contact_form) {
			$m->from('dave@pcdunshaughlin.com', 'Your Application');

			$m->to('dodwyer91@gmail.com', $contact_form->name)->subject('Your Reminder!');
		});

		// save the contact_form to the db
		if($contact_form->save()) {
			return Redirect::to('/contact_success');
		}

	}

	
}
