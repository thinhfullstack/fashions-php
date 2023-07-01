<h2 class="text-center">Giỏ hàng Fashion</h2>
<div class="container"> 
    <table id="cart" class="table table-hover table-condensed"> 
        <thead> 
            <tr> 
                <th style="width:50%">Tên sản phẩm</th> 
                <th style="width:10%">Giá</th> 
                <th style="width:8%">Số lượng</th> 
                <th style="width:22%" class="text-center">Thành tiền</th> 
                <th style="width:10%"> </th> 
            </tr> 
        </thead> 
        <tbody>
            <tr> 
                <td data-th="Product"> 
                    <div class="row"> 
                        <div class="col-sm-2 hidden-xs">
                            <img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/shopping_cart/images/090.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
                        </div> 
                        <div class="col-sm-10"> 
                            <h4 class="nomargin">Sản phẩm 1</h4> 
                            <p>Mô tả của sản phẩm 1</p> 
                        </div> 
                    </div> 
                </td> 
                <td data-th="Price">200.000 đ</td> 
                <td data-th="Quantity">
                    <input class="form-control text-center" value="1" type="number" />
                </td> 
                <td data-th="Subtotal" class="text-center">200.000 đ</td> 
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm">Sửa</button> 
                    <button class="btn btn-danger btn-sm">Xoá</button>
                </td> 
            </tr> 
        </tbody>
        <tfoot> 
            <tr class="visible-xs"> 
                <td class="text-center">
                    <strong>Tổng 200.000 đ</strong>
                </td> 
            </tr> 
            <tr> 
                <td>
                    <a href="index.php" class="btn btn-warning">Tiếp tục mua hàng</a>
                </td> 
                <td colspan="2" class="hidden-xs"></td> 
                <td class="hidden-xs text-center">
                    <strong>Tổng tiền 500.000 đ</strong>
                </td> 
                <td>
                    <a href="#" class="btn btn-success btn-block">Thanh toán</a>
                </td> 
            </tr> 
        </tfoot> 
    </table>
</div>