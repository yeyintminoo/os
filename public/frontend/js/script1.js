$(document).ready(function () {
	// alert("Hell Fucking No!");
	$('.row').on('click','.view-detail',function(){
		// alert("Hell Fucking No!");
		var id = $(this).data('id');
		var name = $(this).data('name');
		var photo = $(this).data('photo');
		var price = $(this).data('price');
		var discount = $(this).data('discount');
		var brand = $(this).data('brand');
		var sub = $(this).data('subcategory');
		var description = $(this).data('description');

        $(".pimg").attr('src',"backend/"+photo);
        $(".pname").text(name);
        $(".pprice").text(price);

	})
})