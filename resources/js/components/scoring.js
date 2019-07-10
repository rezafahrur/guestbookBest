try
{
    $(document).ready(function() {
    var score =  $("#scoreGame").DataTable({
            autoWidth: true,
            order: [
                [2, "desc"] //column 2 is score, 1 is hp, 0 is nama
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
            ajax: {
                type: 'get',
                url: '/api/score',
                dataType:'json',
                dataSrc: ''
            },
            columns: [
                    {data: "nama"},
                    {data: "hp"},
                    {data: "score"}
            ],
            sDom: '<"clear">', //hide searchbox and paginate info
            info:false,
            colReorder: {
                realtime: true
                },
            language: {
                sEmptyTable: "Tidak ada data",
                sProcessing: "Sedang memproses...",
                sLengthMenu: "Tampil _MENU_ Game Score",
                sZeroRecords: "Tidak ditemukan Game Score",
                sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Game Score",
                sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Score",
                sInfoFiltered: "(disaring dari _MAX_ Data Game Score keseluruhan)",
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
    setInterval( function () {
            score.ajax.reload();
        }, 2000);
    });
}
catch{

}
    
