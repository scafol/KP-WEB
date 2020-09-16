function allMember() {
	fetch('https://jsonplaceholder.typicode.com/posts')
		.then(response => response.json())
		.then(data => $.each(data, function (i, data) {
			$('.list-group').append(
				`
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ` + data.title + `
                        <button type="button" data-id="` + data.id + `" class="btn btn-sm btn-danger">Delete</button>
                    </li>
                `
			)
		}))
}

allMember()

$('.list-group').on('click', 'button', function () {
	let id = $(this).data('id')
	fetch('https://jsonplaceholder.typicode.com/posts/' + id, {
			method: 'DELETE',
		})
		// .then(res => res.json())
		.then(res => console.log(res.ok))
})

$('.nav-link').on('click', function () {

	$('a.nav-link').removeClass('active')
	$(this).addClass('active')

	if ($(this).html() == 'All Member') {
		$('.list-group').html('')
		allMember()
	}
	if ($(this).html() == 'Member') {
		$('.list-group').html('')
	}
})
