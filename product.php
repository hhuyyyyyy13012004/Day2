<?php
session_start();

class Product
{
    public $id, $sku, $name, $short_description, $description, $price, $rating, $instruction, $image;

    public function __construct($id, $sku, $name, $short_description, $description, $price, $rating, $instruction, $image) {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->short_description = $short_description;
        $this->description = $description;
        $this->price = $price;
        $this->rating = $rating;
        $this->instruction = $instruction;
        $this->image = $image;
    }
}

// Danh sách sản phẩm
$prods = [];
$p1 = new Product(1, 'FAVH122124SHO01', 'Đầm mini tơ thêu họa tiết form suông xếp li thân trước', 'Đầm mini tơ thêu họa tiết...', 'Chi tiết mô tả sản phẩm...', 800000, 5.0, '', 'https://placehold.co/400x500');
$p2 = new Product(2, 'FAVH122124SHO02', 'Đầm maxi voan tay lỡ', 'Đầm maxi voan tay lỡ...', 'Chi tiết mô tả sản phẩm...', 950000, 4.8, '', 'https://placehold.co/400x500');
$p3 = new Product(3, 'FAVH122124SHO03', 'Đầm cổ yếm họa tiết hoa', 'Đầm cổ yếm họa tiết hoa...', 'Chi tiết mô tả sản phẩm...', 720000, 4.9, '', 'https://placehold.co/400x500');
$p4 = new Product(4, 'FAVH122124SHO04', 'Đầm công sở phối ren', 'Đầm công sở phối ren...', 'Chi tiết mô tả sản phẩm...', 870000, 4.7, '', 'https://placehold.co/400x500');

$prods[] = $p1;
$prods[] = $p2;
$prods[] = $p3;
$prods[] = $p4;

$_SESSION['prods'] = $prods;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Sản phẩm</h2>
    <div class="row">
        <?php foreach ($prods as $product): ?>
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product->image; ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <p class="card-text">
                            <strong><?php echo $product->name; ?></strong><br>
                            <?php echo $product->short_description; ?><br>
                            <strong><?php echo number_format($product->price, 0, ',', '.') . 'đ'; ?></strong>
                        </p>
                        <a href="#" class="btn btn-primary">Mua ngay</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
