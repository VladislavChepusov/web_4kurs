<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

   <table border="1">
     <tr bgcolor="#9acd32">
       <th style="text-align:center">Аватар</th>
       <th style="text-align:center">Никнейм</th>
	   <th style="text-align:center">Должность</th>
	   <th style="text-align:center">Дата регистрации</th>
	   <th style="text-align:center">Ответов на сайте</th>
	   <th style="text-align:center">Статус</th>
	  
     </tr>
     <xsl:for-each select="catalog/cd">
     <tr>
		<td style=" width: 100px;height: 80px;">
			<img   style=" width: 90px;height: 85px; margin-left:5%"><xsl:attribute name="src"><xsl:value-of select="image"/></xsl:attribute></img>
		</td>
		
		<td style="text-align:center">
			<xsl:value-of select="name" />
		</td>
		
	   <td style="text-align:center">
			<xsl:value-of select="group" /></td>
	   <td style="text-align:center">
			<xsl:value-of select="data" />
		</td>
		<td style="text-align:center">
			<xsl:value-of select="help" />
		</td>
		
	   <td style="text-align:center">
			<xsl:value-of select="status" />
		</td>
		
	  
	   
     </tr>
     </xsl:for-each>
   </table>
</xsl:template>

</xsl:stylesheet>
