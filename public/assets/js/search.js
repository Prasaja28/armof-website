$(document).ready(function () {
  $('#search').keypress(() => {
    if (event.key === 'Enter') {
      let url = 'http://127.0.0.1:5500/index.php';
      let dataInput = $('#search').val();

      alert(dataInput);
      //   $.post(url, dataInput, (data, status) => {
      //     alert(`data ${data} status ${status}`);
      //   });
    }
  });
});
