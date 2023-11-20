<template>
    <div>
        <form @submit.prevent="save">
        <input type="text" placeholder="StudentID" v-model="StudentID">
        <input type="text" placeholder="LastName" v-model="LastName">

        <input type="text" placeholder="FirstName" v-model="FirstName">
        <input type="text" placeholder="YearLevel" v-model="YearLevel">
        <input type="text" placeholder="Program" v-model="Program">
         <button type="submit">submit</button>
        </form>
    </div>

</template>

<script>
    export default
    {
        data(){
            return{   
            StudentID:"",
            LastName:"",
            FirstName:"",
            YearLevel:"",
            Program:""
        }
    },
        methods:{
            async save(){
                try {
                    const ins = await axios.post("save",{
                        StudentID: this.StudentID,
                        LastName: this.LastName,
                        FirstName: this.FirstName,
                        YearLevel: this.YearLevel,
                        Program: this.Program,
                    });
                } catch (error) {
                   
                }
            }
        }
    }
</script>