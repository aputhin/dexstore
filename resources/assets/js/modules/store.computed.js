module.exports = {
	/**
	 * Check the form's valid. Should only be valid when the
	 *	name, opens at and closes fields are filled.
	 */
	valid: function() {
		return this.form.name.length > 0 && this.form.opens.length > 0 && this.form.closes.length > 0;
	},
}
