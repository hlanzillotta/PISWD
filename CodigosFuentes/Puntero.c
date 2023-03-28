#include <stdio.h>
#include <stdlib.h>

int main()
{
	FILE * pf;//Handler, puntero al archivo.
	
	int numero=150,i;
	
	pf=fopen("archivoprueba.dat","wb");
	
	if(pf==NULL)
	  {
	    puts("Error al crear archivo.");
	    getch();
	    exit(1);
	  }
	
	puts("Archivo creado correctamente.");
	
	for(i=1;i<=3;i++)
	    {
		 numero*=i; 
		fwrite(&numero,sizeof(int),1,pf);
	   }
	   
	fclose(pf);//Cerrar el archivo.  
	
	pf=fopen("archivoprueba.dat","rb");
	
	if(pf==NULL)
	  {
	    puts("Error al leer archivo.");
	    getch();
	    exit(1);
	  }
	  
	fread(&numero,sizeof(int),1,pf); 
	while(!feof(pf))
          {
		   printf("Valor : %d\n",numero); 
		   fread(&numero,sizeof(int),1,pf);
		  }
	fclose(pf);
	
	
	getch();  
	return 0;
	
	
}
