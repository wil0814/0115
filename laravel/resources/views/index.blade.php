<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <link rel="stylesheet" href="//unpkg.com/element-plus/dist/index.css" />
    <script src="//unpkg.com/element-plus"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>論文介紹</title>
  </head>

  <style>
    html,body,#app,.el-container{
      padding: 0px;
      margin: 0px;
      height: 100%;
    }
    ul,li{
      list-style:none;    
      padding:0px; 
    }
    h5{
      margin-left:20px;
      margin-top:20px;

    }
    h2{
      margin-top:60px;
      border-bottom: solid gray;
    }
    .mymouse{
     cursor:pointer;
    }
    .fix{
      position: fixed; 
      top: 0;
      left: 0;
      width:100%;
    }
      
    .main-div{
      margin-left:150px;
      margin-right:150px;
    }     
    .li-margin{      
      margin-left:35px;

    }
    .header-left{
      text-align: left;
    }
    .header-right{
      text-align: right;
    }
    .el-header{
      background-color: #b3c0d1;
      color: var(--el-text-color-primary);
      text-align: center;
      line-height: 60px;       
    }

    .el-aside {
      background-color: #d3dce6;
      color: var(--el-text-color-primary);
      text-align: left;
      line-height: 100px;
      margin-top:58px;

    }

    .el-main {
      background-color: #e9eef3;
      color: var(--el-text-color-primary);
      text-align: left;
      line-height: 25px;
      margin-top:58px;
      

    }

    body > .el-container {
      margin-bottom: 40px;
    }

    .el-container:nth-child(5) .el-aside,
    .el-container:nth-child(6) .el-aside {
      line-height: 2min-height60px;
    }

    .el-container:nth-child(7) .el-aside {
      line-height: 320px;
    }
    .grid-content {
      border-radius: 4px;
      min-height: 60px;
    }
   
  
  
  </style>   


  <body>
  
   <div id="app">

     <el-container>
       <el-header class="fix"  height="57.6px">
         <el-row>
	     <el-col :span="6"><div class="grid-content  header-left" style="font-size:30px;font-family:Microsoft JhengHei;font-weight:bold;"> 雲端平台與資訊安全</div></el-col>
             <el-col :span="6" :offset="12"><div class="grid-content  header-right">{% type %} 歡迎你的加入</div></el-col>
         </el-row>
       </el-header>
       <el-container>
	 <el-aside width="320px">
	   	    
          
	   <ul  style="line-height:29px; margin-top:40px;padding:0px;">
	     <li>
               <h5>雲端平台</h5>
		 <ul>
                   <li class="li-margin mymouse" @click="change('azure')">AZURE</li>
                   <li class="li-margin mymouse" @click="change('aws')">AWS</li>
		   <li class="li-margin mymouse" @click="change('gcp')">GCP</li>
		 </ul>
	     </li>
	     <li>
	       <h5>惡意程式</h5>
	         <ul>
		   <li class="li-margin mymouse" @click="change('VIRUS')">病毒</li>
                   <li class="li-margin mymouse" @click="change('WORM')">蠕蟲</li>
                   <li class="li-margin mymouse" @click="change('TROJAN')">木馬</li>

		 </ul>
	     </li>

	   </ul>
       


         </el-aside>
	 <el-main>
	 
	
	 
	   <azure-component v-if="type === 'azure'">
             <template v-slot:tool> {%response[0].tool%}  </template> 
             <template v-slot:setting> {%response[0].setting%}   </template>
	     <template v-slot:opsource> {%response[0].OPsource%} </template>
	     <template v-slot:extra> {%response[0].extra%} </template>
	     <template v-slot:backup> {%response[0].backup%} </template>
           </azure-component> 
	   <aws-component v-if="type === 'aws'" >
             <template v-slot:easyuse> {%response[0].easyuse%}  </template>
             <template v-slot:flexible> {%response[0].flexible%}  </template>
             <template v-slot:cheap> {%response[0].Cheap%}  </template>
             <template v-slot:trusty> {%response[0].trusty%}  </template>
             <template v-slot:efficacy> {%response[0].efficacy%}  </template>
             <template v-slot:security> {%response[0].Security%}  </template>
	   </aws-component>
	   <gcp-component v-if="type === 'gcp'"> 
             <template v-slot:exampleone> {%response[0].example%}  </template>
             <template v-slot:exampletwo> {%response[1].example%}  </template>
             <template v-slot:examplethree> {%response[2].example%}  </template>
           </gcp-component>
	 </el-main>
       </el-container>
    </el-container>
   </div>




  <script>          
    const app= Vue.createApp({
      delimiters: ['{%','%}'],
      data(){
        return{
	type:'azure',
	response:'null',
	}  
      },
      methods:{
        change(val){
	let self=this
	this.type=val;	
	axios({url:`/${this.type}`,method:'post'})
	   .then(function(response){		  
		   console.log("success");		   		   
		   self.response=response.data;		  		  
     	    })
	   .catch(function(error){
              console.log('error');
	   });		
	},	
      },
      mounted(){
	this.change('azure');	   
      },


    });
    
    app.component('azure-component',{
    template:`
      <div class="main-div">
        <h1 > AZURE </h1>
	<p> 在了解Azure是什麼前，必須先提到大家廣為熟悉的微軟。聽到微軟大家可能會先想到常使用的 Windows，但其實從 2010 年開始，微軟就已經開始提供雲端服務了，現在也已是市佔率第二的雲端服務供應商，超過90% 的公司都在使用微軟所提供的雲端服務：Microsoft Azure。</p>
	<h2> Azure是什麼？特色與優點有哪些？</h2>
	<p>Azure是什麼呢？Azure可以讓公司的 IT 部門不用再煩惱伺服器的管理以及擴充，平台內建置了自動化即可擴充性服務，公司只需要建立一個自動化系統，有需要時再打開，這麼一來就能夠大大節省公司成本。
	而Azure特色之一是他有更快的部署次數，客戶端採用時間可以大幅縮短，開發資源庫也相當豐富，能大幅的降低應用程序生命周期成本。當你的伺服器有季節性的流量時，Azure也可以針對不同的需求做調整。</p>
	<h2>Aure提供的服務有哪些？</h2>
	<p>Azure提供的服務從雲端運算、資料備份、資料庫到應用程式皆包含在內，而這些服務也是所有企業所需要的功能，以下分別介紹Azure常見的應用：</p>
	<h3>1. Azure電商工具</h3>
	<p><slot name="tool"></slot></p>
	<h3>2. 建置測試環境</h3>
	<p><slot name="setting"></slot></p>
	<h3> 3. Open Source多元支援</h3>
	<p><slot name="opsource"></slot></p>
	<h3>4. 擴充主機規格</h3>
	<p><slot name="extra"></slot></p>
	<h3>5. 備份企業資料</h3>
	<p><slot name="backup"></slot></p>



      </div>`
    
    });
    app.component('aws-component',{
    template:`
      <div class="main-div">
        <h1>AWS</h1>
	<p>亞馬遜網絡服務（英語：Amazon Web Services，縮寫為AWS），由亞馬遜公司所建立的雲端運算平台，向個人、企業和政府提供一系列包括信息技術基礎架構和應用的服務，如存儲、數據庫、計算、機器學習等等。 AWS提供的大多數服務都使用按需付費（Pay-as-you-go）的收費模式，按照用戶使用資源的級別和時長收費。因此，用戶可以關閉和刪除未使用的AWS服務資源以節省費用，或者在用戶請求突然增加時很快添加新的資源，避免在平時為峰值系統負荷付費。對於一些初創企業，使用AWS提供的計算資源也有助於減少初期的硬件投資和維護軟硬件的人員費用 </p>
	<h2>AWS提供各式各樣雲端產品</h2>
	<p>Amazon Web Services 提供各式各樣的全球雲端產品，包含運算、儲存、資料庫、分析、網路、行動、開發人員工具、管理工具、IoT、安全和企業應用程式。這些服務能協助組織更快速地運作、降低 IT 成本及擴展。最大型的企業和最熱門的新創公司都信任 AWS 為各種工作負載提供技術支援，包括：Web 和行動應用程式、遊戲開發、資料處理和倉儲、儲存、存檔等等。</p>
	<h2>aws優是有哪些</h2>
	<div style="height:29px;"></div>
	<h3>1. 易於使用</h3>
	<p><slot name="easyuse"></slot></p>
        <h3>2. 靈活</h3>
	<p><slot name="flexible"></slot></p>
	<h3>3. 經濟實惠</h3>
        <p><slot name="cheap"></slot></p>
        <h3>4. 可靠</h3>
        <p><slot name="trusty"></slot></p>
        <h3>5. 可擴展性和高效能</h3>
        <p><slot name="efficacy"></slot></p>
        <h3>6. 安全</h3>
        <p><slot name="security"></slot></p>
      </div>`
    
    });
    app.component('gcp-component',{
    template:`
      <div class="main-div">
        <h1>GCP</h1>
	<p>GCP（Google Cloud Platform）是 Google 提供的雲端平台服務，包含了運算（如 Compute Engine、Google Kubernetes Engine）、資料分析（如 BigQuery、Cloud Dataflow）、儲存（Cloud Storage、Cloud Filestore）以及API管理（如 Apigee API 平台、API 數據分析）、機器學習（如Cloud TPU、Cloud Machine Learning Engine） 等眾多產品。</p>
	<h2>GCP 有哪些優點？跟其他雲端平台又有什麼不同？</h2>
	<p>GCP 提供多層級安全基礎架構、專家工程師和對資訊公開的承諾，在建構、建立、程式設計或儲存作業上，且配合不同產業的需求打造各種安全性解決方案，無論是金融服務產業、政府機關或是媒體娛樂業，都能保證您的資料安全無虞。</p>
	<p>我們將集結雙方工程師的力量，在您使用雲端服務的過程中，隨時提供支援，並協助您找出所需解決方案。
GCP 有靈活的開放技術，可快速並順利遷移至 VM 或容器，價格選項彈性且不需綁約。
GCP 透過 AI 與資料分析功能解決問題，協助您妥善運用手邊的資料，加上預先訓練的自訂機器學習模型，可提升您的應用程式效能，解決先前困擾您許久的問題。</p>
        <p> 再簡單介紹一下各個平台：Amazon Web Services (AWS) 於 2006 年創立，和其他平台相比擁有先發優勢，如今提供的運算、儲存、資料庫、分析、應用程式服務超過 70 種，覆蓋面最廣最深也就自然成為大多數用戶的首選。 Microsoft Azure 於 2010 年成立，擁有 67 項服務並於 30 個區域設立資料中心。</p>
	<p>而 GCP 於隔年成立，提供超過 50 項服務，正在積極猛烈地擴張事業版圖、目前在世界各地擁有超過 130 個業務據點。而目前像是 Spotify、Snapchat、Netflix、AirBNB 等企業都搬遷至 GCP 上，將維護網站與數位資源的工作交付給雲端平台去處理；省去自己建置並維護 IT 部門與網路基礎建設的成本，更能將心力放在核心業務上。</p>
	<h2>GCP 應用案例/成功案例相關問題</h2>
	<h3>有沒有 CloudMile 服務過的客戶或成功案例可以參考？</h3>
        <p><slot name="exampleone"></slot></p>
	<h3>有沒有國外知名企業使用了 GCP 獲得很好的成效可以參考？</h3>
        <p><slot name="exampletwo"></slot></p>
        <p><slot name="examplethree"></slot></p>

	    
	    
	    
	    
	    
	    
	    
	    </div>`
    
    });



    app.use(ElementPlus);
    app.mount('#app');
  </script>








  </body>
</html>




















