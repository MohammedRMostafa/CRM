<div class="form-floating mb-3">
    <input type="text" @class(['form-control', 'is-invalid' => $errors->has('name')]) id="name" name="name" placeholder="name"
        value="{{ old('name', $contact->name) }}">
    <label for="name">Name</label>
    <x-error field-name="name" />
</div>

<div class="form-floating mb-3">
    <input type="text" @class(['form-control', 'is-invalid' => $errors->has('email')]) id="email" name="email" placeholder="email"
        value="{{ old('email', $contact->email) }}">
    <label for="email">Email</label>
    <x-error field-name="email" />
</div>

<div class="form-floating mb-3">
    <input type="text" @class(['form-control', 'is-invalid' => $errors->has('company')]) id="company" name="company" placeholder="company"
        value="{{ old('company', $contact->company) }}">
    <label for="company">Company</label>
    <x-error field-name="company" />
</div>

<div class="form-floating mb-3">
    <input type="text" @class(['form-control', 'is-invalid' => $errors->has('job')]) id="job" name="job" placeholder="job"
        value="{{ old('job', $contact->job) }}">
    <label for="job">Job</label>
    <x-error field-name="job" />
</div>

<div class="form-floating mb-3">
    <input type="text" @class(['form-control', 'is-invalid' => $errors->has('phone_number')]) id="phone_number" name="phone_number" placeholder="phone_number"
        value="{{ old('phone_number', $contact->phone_number) }}">
    <label for="phone_number">Phone Number</label>
    <x-error field-name="phone_number" />
</div>


<div class="d-flex col-3">
    <button type="submit" class="mx-1 btn btn-outline-primary">{{ $button_lable }}</button>
    <a href="{{ route('contacts.index') }}" class="btn btn-outline-primary">Home</a>
</div>
