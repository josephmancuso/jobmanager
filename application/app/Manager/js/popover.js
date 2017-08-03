$('[data-toggle="popover"]').popover({
    html: true,
    container: 'body',
    content: function() {
        return $('#popover-content').html();
    }
});