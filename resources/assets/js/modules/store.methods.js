module.exports = {
	
    save: function() {
        this.$http.post('/api/stores/save', this.form)
            .then((response) => {
                var type = this.form.id == '' ? 'Inclusão' : 'Edição';
                alert(type + ' realizada com sucesso!');
                window.location.replace('/list?admin=1');
            })
            .catch( (error) => {
                alert('Ocorreu um erro ao tentar salvar: ' + error);
            });
    }
}
