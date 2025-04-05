<form action="{{ route('submit-complaint') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Type of the Issue:</label>
    <select name="issueType" required>
        <option>Select the Issue Type</option>
        <option value="road">Road Maintenance</option>
        <option value="lighting">Street Lighting</option>
        <option value="water">Water & Drainage</option>
        <option value="garbage">Illegal Garbage Dumping</option>
    </select>

    <label>Address:</label>
    <input type="text" name="address" required>

    <label>Details:</label>
    <textarea name="details" required></textarea>

    <label>Upload Image:</label>
    <input type="file" name="image" accept="image/*">

    <button type="submit">Submit</button>
</form>
