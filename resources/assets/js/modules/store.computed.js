module.exports = {
	/**
	 * Check the form's valid. Should only be valid when the
	 *	name, opens at and closes fields are filled.
	 */
	valid: function() {
		return this.store.name.length > 0 && this.store.opens.length > 0 && this.store.closes.length > 0;
	},
}
