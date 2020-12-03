$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
$(document).ready(function () {
    $("#year").on("change", function (e) {
        var year_id = e.target.value;

        $.ajax({
            url: "/year_to_major",
            type: "GET",
            data: {
                year_id: year_id,
            },

            success: function (data) {
                $("#major").empty();

                $.each(data.majors, function (index, major) {
                    $("#major").append(
                        '<option value="' +
                            major.id +
                            '">' +
                            major.MajorName +
                            "</option>"
                    );
                });
            },
        });
    });
});
