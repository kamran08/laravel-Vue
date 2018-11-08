export default  {
    data(){
        return {

        }
    },
    
   methods: {
  
    async callApi(method, url, dataObj){
        try{

            let data = await axios({
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                method: method,
                url: url,
                data: dataObj
            })
            return data 
            
        }catch(e){
            
            return e.response
        }
    },

    



   },

  
};