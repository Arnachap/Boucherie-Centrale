$('#msgBtn').on('click', () => {
    $('#msgBtn').addClass('active');
    $('#estimateBtn').removeClass('active');

    $('#msgForm').css('display', 'flex');
    $('#estimateForm').css('display', 'none');
});

$('#estimateBtn').on('click', () => {
    $('#estimateBtn').addClass('active');
    $('#msgBtn').removeClass('active');

    $('#estimateForm').css('display', 'flex');
    $('#msgForm').css('display', 'none');
});