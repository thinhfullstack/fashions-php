<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 class="display-5">Product Infomation</h3>
    <a href="index.php?module=product&action=list">Back</a>
</div>
<div>
    <form action="index.php?module=product&action=create" method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Product name</label>
            <div class="col-sm-9">
                <input type="text" name="name" class="form-control <?= $errName ? 'border-danger' : '' ?>" placeholder="Nhập tên của sản phẩm" />
                <?= $errName ? "<div class='text-danger'>$errName</div>" : '' ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Product price</label>
            <div class="col-sm-9">
                <input type="text" name="price" class="form-control <?= $errPrice ? 'border-danger' : '' ?>" placeholder="Nhập giá của sản phẩm" />
                <?= $errPrice ? "<div class='text-danger'>$errPrice</div>" : '' ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label">Feature Image</label>
            <div class="col-sm-9">
                <input type="file" name="file" />
                <?= $errFile ? "<div class='text-danger'>$errFile</div>" : '' ?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
                <button type="submit" name="btn-product" class="btn btn-primary">Save</button> &nbsp;
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </form>
</div>
