<h1>Thêm Sản Phẩm</h1>
<form action="/ss12/product/store" method="POST" enctype="multipart/form-data">
    <label>Name:</label><br>
    <input type="text" name="Name"><br><br>

    <label>Price:</label><br>
    <input type="text" name="Price"><br><br>

    <label>Chọn ảnh từ máy:</label><br>
    <input type="file" name="ImageFile"><br><br>

    <label>Hoặc dùng link ảnh:</label><br>
    <input type="text" name="ImageURL" placeholder="https://..."><br><br>

    <input type="submit" value="Lưu">
</form>
