module.exports = {
	/**
	 * Check the form's valid. Should only be valid when the
	 *	name, opens at and closes fields are filled.
	 */
	valid: function() {
		return this.name.length > 0 && this.opens.length > 0 && this.closes.length > 0;
	},
}
