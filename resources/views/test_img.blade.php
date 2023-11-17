<form action="/test/img" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name">
    <input type="number" name="price">
    <input type="number" name="storage">
    <input type="text" name="description">
    <input type="text" name="gender">
    <input type="number" name="brand_id">
    <input type="number" name="category_id">
    <input type="file" name="img1">
    <input type="file" name="img2">
    <input type="submit" value="clickk">
</form>