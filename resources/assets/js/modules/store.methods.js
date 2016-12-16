module.exports = {
	
    // newOrders: function() {
    //     this.$http.get(wsUrl + 'widgets')
    //         .then((response) => {
    //             let data = response.data;

    //             // Atribui os números de cada widget ao atributo do Vue
    //             this.newOrders  = data.newOrders;
    //             this.comments   = data.comments;
    //             this.newUsers   = data.newUsers;
    //             this.pageViews  = data.pageViews;
    //         })
    //         .catch((error) => {
    //             alert('Ocorreu um erro ao tentar trazer os dados dos widgets: ' + error);
    //         });
    // },

    // /**
    // * Inicializa os dados de pageviews do dashboard
    // */
    // initTrafficChat: function() {
    // 	// Faz a requisição para o serviço de dados de pageviews
    //     this.$http.get(wsUrl + 'pageViews')
    //         .then((response) => {
    //             let data = response.data;

    //             /* Para cada item, adiciona a label (month) e o valor (views)
				//    ao respectivo array */
    //             data.forEach((item) => {
    //                 this.months.push(item.month);
    //                 this.views.push(item.views);
    //             }, this);

    //             // Constrói o gráfico
    //             this.trafficChart = this.buildLineChart("trafficChart", this.months, this.views);
    //         })
    //         .catch((error) => {
    //             alert('Ocorreu um erro ao tentar trazer os dados do gráfico: ' + error);
    //         });
    // },

    // /**
    // * Método para construir um gráfico de linhas 
    // *
    // * @param id String      - ID do elemento <canvas> que irá receber a chart
    // * @param labels Array   - Array de etiquetas dos datasets do gráfico
    // * @param values Array   - Array de valores para o dataset inicial do gráfico
    // */
    // buildLineChart: function(id, labels, values) {
    //     // Encontra o elemento canvas pelo id
    //     let chartDom = document.getElementById(id);

    //     // Atribui ao objeto Vue a respectiva chart 
    //     return new Chart(chartDom, {
    //         type: 'line',
    //         data: {
    //             labels: labels,
    //             datasets: [{
    //                 label: 'Traffic',
    //                 data: values,
    //                 borderColor: '#30a4ff',
    //                 backgroundColor: '#d5edff'
    //             }]
    //         },
    //         options: {
    //             legend: {
    //                 display: false
    //             },
    //             scales: {
    //                 yAxes: [{
    //                     ticks: {
    //                         beginAtZero:true
    //                     }
    //                 }]
    //             }
    //         }
    //     });
    // },

    // /**
    // * Método para inicializar o Chat com o log de mensagens trazido do Serviço
    // */
    // initChat: function() {
    //     // Faz a requisição do log de mensagens
    //     this.$http.get(wsUrl + 'messages')
    //         .then((response) => {
    //             // Atribui o retorno do serviço ao Log
    //             this.chatLog = response.data;
    //         })
    //         .catch( (error) => {
    //             alert('Ocorreu um erro ao tentar trazer os dados do chat: ' + error);
    //         });
    // },


    newStore: function() {
        this.$http.post('/api/stores/add', this.form)
            .then((response) => {
                alert('Inclusão realizada com sucesso!');
                window.location.replace('/list?admin=1');
            })
            .catch( (error) => {
                alert('Ocorreu um erro ao tentar salvar: ' + error);
            });
    }
}