<div>
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $vendor->name ?? '') }}">
</div>

<div>
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $vendor->email ?? '') }}">
</div>

<div>
    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone', $vendor->phone ?? '') }}">
</div>
