// JavaScript Document
//�����˵�
<script language = "JavaScript">
var onecount;
onecount=0;
subcat = new Array();
        
subcat[0] = new Array("Paris","IledeFrance","Paris");//�ڶ���ѡ�
//subcat[0] = new Array("��������","13","1");����ѡ���������ֵ�ǣ�,������ʡ��ѡ����е�ֵ,�ã���ȷ���������������ڱ����е�


subcat[1] = new Array("Seine-Saint-Denis","IledeFrance","SeineSaintDenis"); 

subcat[2] = new Array("Seine-et-Marne","IledeFrance","SeineetMarne");

subcat[3] = new Array("Yvelines","IledeFrance","Yvelines");

subcat[4] = new Array("Essonne","IledeFrance","Essonne");

subcat[5] = new Array("Hauts-de-Seine","IledeFrance","HautsdeSeine");

subcat[6] = new Array("Val-de-Marne","IledeFrance","ValdeMarne");

subcat[7] = new Array("Val-d'Oise","IledeFrance","ValdOise");//ildefrace ����   

subcat[8] = new Array("Bas-Rhin","Alsace","BasRhin");

subcat[9] = new Array("Haut-Rhin","Alsace","HautRhin");//alsace���� 

subcat[10] = new Array("Dordogne","Aquitaine","Dordogne");

subcat[11] = new Array("Gironde","Aquitaine","Gironde");

subcat[12] = new Array("Landes","Aquitaine","Landes");

subcat[13] = new Array("Lot-et-Garonne","Aquitaine","LotetGaronne");

subcat[14] = new Array("Pyr��n��es-Atlantiques","Aquitaine","PyrnesAtlantiques");//aquitainez������

subcat[15] = new Array("Allier","Auvergne","Allier");

subcat[16] = new Array("Cantal","Auvergne","Cantal");

subcat[17] = new Array("HauteLoire","Auvergne","HauteLoire");

subcat[18] = new Array("PuydeD?me","Auvergne","PuydeDome");//auvergne ����







	







			
























        
onecount=7;

function changelocation(locationid)
    {
    document.myform.smalllocation.length = 0;
       
           document.myform.dlmc0.length = 0;
document.myform.dlmc0.options[0] = new Option('==��ѡ��������==','');

       

    var locationid=locationid;
    var i;
    document.myform.smalllocation.options[0] = new Option('==��ѡ����==','');
    for (i=0;i < onecount; i++)
        {
            if (subcat[i][1] == locationid)
            {
                document.myform.smalllocation.options[document.myform.smalllocation.length] = new Option(subcat[i][0], subcat[i][2]);
            }        
        }
        
    }   
</script>