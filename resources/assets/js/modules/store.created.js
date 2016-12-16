var created = function() {
	if (!!$('#storeid').val()) {
		this.form.id = $('#storeid').val();
		this.form.name = $('#storename').val();
		this.form.desc = $('#storedesc').val();
		this.form.logo = $('#storelogo').val();
		this.form.opens = $('#storeopens').val();
		this.form.closes = $('#storecloses').val();
	}
};

exports.do = created;
