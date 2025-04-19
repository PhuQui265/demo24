<h1>Danh sách sản phẩm</h1>
<a href="/ss12/product/create">Thêm sản phẩm</a>
<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Ảnh</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($productList as $product): ?>
        <tr>
            <td><?= $product['ID'] ?></td>
            <td><?= htmlspecialchars($product['Name']) ?></td>
            <td><?= number_format($product['Price']) ?> VND</td>
            <td>
                <img src="<?= str_starts_with($product['Image'], 'http') ? $product['Image'] : '/ss12/' . $product['Image'] ?>" width="100" style="border-radius: 10px;">
            </td>
            <td>
                <a href="/ss12/product/delete/<?= $product['ID'] ?>" onclick="return confirm('Xoá sản phẩm?')">🗑️</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
