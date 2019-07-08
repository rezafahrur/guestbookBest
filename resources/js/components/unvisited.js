try
{
    $(document).ready(function() {
        $("#unvisited").DataTable({
            autoWidth: true,
            order: [
                [0, "asc"]
            ],
            responsive: true,
            columnDefs: [
              { responsivePriority: 1, targets: 0 },
              { responsivePriority: 2, targets: -1 },
              {
                  className: 'text-center',
                  targets: "_all",
              }
            ],
            language: {
                sEmptyTable: "Tidak ada data",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampil _MENU_ Tamu Belum Datang",
                sZeroRecords: "Tidak ditemukan Tamu yang Belum Datang yang sesuai",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Tamu Belum Datang",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Tamu",
                sInfoFiltered: "(disaring dari _MAX_ Data Data Tamu Belum Datang keseluruhan)",
                sInfoPostFix: "",
                sSearch: "Cari:",
                sUrl: "",
                oPaginate: {
                    sFirst: "<<",
                    sPrevious: "<",
                    sNext: ">",
                    sLast: ">>"
                }
            }
        });      
    });
}
catch{

}
    
