let $container = $('.js-vote-arrows');

$container.find('a').on('click', function(e) {
    e.preventDefault();
    let $link = $(e.currentTarget);

    console.log('test')

    $.ajax({
        url: '/comments/10/vote/'+$link.data('direction'),
        method: 'POST'
    }).then(function(response) {
        $container.find('.js-vote-total').text(response.votes);
    }) 
})