<template>
    <insert/>
    <div>
        <table border ="1">
            <tr>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Year Level</th>
                <th>Program</th>
            </tr>
            <tr v-for="info in info">
                <td>{{ info.StudentID }}</td>
                <td>{{ info.LastName }}</td>
                <td>{{ info.FirstName }}</td>
                <td>{{ info.YearLevel }}</td>
                <td>{{ info.Program }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
import insert from '@/components/insert.vue'
import axios from 'axios'
export default{
    components:{
        insert
    },
    data(){
        return{
            info:[],
            StudentID:"",
            LastName:"",
            FirstName:"",
            YearLevel:"",
            Program:""
        }
    },
    created(){
      this.getInfo();   
    },
        methods:{
            async getInfo(){
                try {
                    const inf = await axios.get('main');
                    this.info = inf.data;
                
                } catch (error) {
                    console.log(error);    
                }
            }
        }
        }
</script>