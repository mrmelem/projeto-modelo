$(document).on('keyup', '#title', e => {
    const value = e.target.value
    .replaceAll(' ', '-')
    console.log(value)
    $('#slug').val(value.toLowerCase());
})