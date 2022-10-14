import react,{useEffect,useState,submit} from 'react';
import ReactDOM from 'react-dom';
import './App.css';
import Header from './Header';
import SideMenu from './SideMenu'
import { useForm } from 'react-hook-form';
import Moment from 'moment';
import DatePicker from 'react-datepicker';
import 'react-datepicker/dist/react-datepicker.css';
import ReactHtmlTableToExcel from 'react-html-table-to-excel';
import filterFactory,{ textFilter } from 'react-bootstrap-table2-filter';
import BootstrapTable from 'react-bootstrap-table-next';
import 'bootstrap/dist/css/bootstrap.min.css';
import  paginationfactory from 'react-bootstrap-table2-paginator';
import  'react-bootstrap-table2-paginator/dist/react-bootstrap-table2-paginator.min.css';
import  'react-bootstrap-table2-filter/dist/react-bootstrap-table2-filter.min.css';
import ToolkitProvider ,{CSVExport,Search} from  'react-bootstrap-table2-toolkit';
import  * as XLSX from "xlsx";


function Bulk_Mapping_Salesman_to_Dealer(){ 

  const MyExportCSV = (props) =>{
  const handleClick = () => {
    props.onExport()

  };
  return(

      <div class="exp-bnt">
        <button className="btn btn-success cust-btn" onClick={handleClick}>Export</button>
      </div>

    )
}
const newrmsisdn='';

const newsmsisdn='';

const handleFile = async(e) =>{
  

  const file =e.target.files[0];
  const data = await file.arrayBuffer();
  const workbook = XLSX.read(data);

  const worksheet = workbook.Sheets[workbook.SheetNames[0]];
  const jsonData = XLSX.utils.sheet_to_json(worksheet);

 console.log(jsonData);

  for (const value of jsonData) {
     

  const newrmsisdn = value.rmsisdn;
  const newsmsisdn = value.smsisdn;

var  username = sessionStorage.getItem('uname');
console.log(username);  

var bodydata = {"reportid": '-3',"parameter": "~1:STRING:RETAILER_MSISDN:"+newrmsisdn+"~2:STRING:SALES_PERSON_MSISDN:"+newsmsisdn+""}

console.log(bodydata);

const response = await fetch('http://2.48.3.202:3021/generate/reportdatabyproc',{
          method:'POST',
          body: JSON.stringify(bodydata)

          
    })

    const logindata = await response.json();

    console.log(logindata.data)
    const logindataa = setData(logindata.data);
  
}
window.alert('Bulk update Succesfully Updated by ' +username);
 window.location.href='http://2.48.3.202:3000/Bulk_Mapping_Salesman_to_Dealer';
} 



const columns = [

{dataField:'retailerName',text:'Retailer Name',sort:true},
{dataField:'mobileNo',text:'Mobile No',sort:true},
{dataField:'moq',text:'MOQ',sort:true},
{dataField:'createdDate',text:'Created Date',sort:true},
{dataField:'modifiedDate',text:'Modified Date',sort:true},
{dataField:'modifiedBy',text:'Modified by',sort:true},
{dataField:'moqBeforeNotification',text:'MOQ Before Notification',sort:true},

] 

const pagination = paginationfactory({
  page:1,
  sizePerpage:5,
  lastPageText:'>>',
  firstPageText:'<<',
  nextPageText:'>',
  prePageText:'<',
  showTotal:true,
  alwaysShowAllBtns:true,
})
const { SearchBar } = Search;
const [selectedDate , setSelectedDate] = useState()
const [formdata,setformData] = useState({
  user:'',
  rmsisdn:'',
  smsisdn:''

});
const [data,setData] = useState([]);
const {user,smsisdn,rmsisdn} = formdata;

const [loading,setLoading] = useState(false);



const changeHandler = e => {
  setformData({...formdata,[e.target.name]:[e.target.value]})
}


const {
    handleSubmit,
    formState: { errors, isValid },
  } = useForm({
    mode: 'onChange',
  })

const submitHandler = async(e) =>{

const newmsisdn = smsisdn.toString();
const moqmountnew = rmsisdn.toString();
  

}


return (
<div className="row">
<Header />
<SideMenu />

<p className="rep-name">Bulk Mapping Salesman to Dealer</p>
   <div class="form-box form_box_cust">

   <div class="form-section">
  
    <br/>
    <center><h5>Upload File here for Bulk Update</h5></center><br/>
    
    <center> <input type="file"  onChange={(e) => handleFile(e)}/></center>
</div>


      </div>



</div>

)
}
export default Bulk_Mapping_Salesman_to_Dealer;

