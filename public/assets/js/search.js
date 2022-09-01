$(document).ready(function () {
    $("#search").keypress(() => {
        if (event.key === "Enter") {
            let url = "http://127.0.0.1:8000/";
            let dataInput = $("#search").val();

            alert(dataInput);
            //   $.post(url, dataInput, (data, status) => {
            //     alert(`data ${data} status ${status}`);
            //   });
        }
    });
});
