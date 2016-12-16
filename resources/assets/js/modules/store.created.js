var created = function() {
	if (!!$('#storeid').val()) {
		this.form.id = $('#storeid').val();
	}
}

exports.do = created;
