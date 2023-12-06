$(function () {
  $(".modalUbah").on("click", function () {
    $("#exampleModalLabel").html("Ubah Data Layangan");
    $(".modal-footer button[type=submit]").html("Edit");

    $(".modal-body form").attr("action", "http://localhost/layangan_mvc/public/dashboard/edit");

    const id = $(this).data("id");
    console.log(id);
    $.ajax({
      url: "http://localhost/layangan_mvc/public/dashboard/detail",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#ukuran").val(data.ukuran);
        $("#no_layangan").val(data.no_layangan);
        $("#ukuran_tali").val(data.ukuran_tali);
        $("#warna_layangan").val(data.warna_layangan);
        $("#id_jenis").val(data.id_jenis);
        $("#id_kategori").val(data.id_kategori);
        $("#id").val(data.id);
      },
    });
  });
  $(".modalUpload").on("click", function () {
    $("#exampleModalLabel").html("Upload Data Layangan");
    $(".modal-footer button[type=submit]").html("Upload");

    const id = $(this).data("id");

    $("#nama").val("");
    $("#ukuran").val("");
    $("#no_layangan").val("");
    $("#ukuran_tali").val("");
    $("#warna_layangan").val("");
    $("#id_jenis").val("");
    $("#id_kategori").val("");
    $("#id").val("");
  });
});
