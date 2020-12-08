<?xml version="1.0" encoding="windows-1251"?>
<xsl:stylesheet version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
   <h2>файл xsl. Коллекция альбомов</h2>
   <table border="1">
     <tr bgcolor="#9acd32">
       <th style="text-align:left">Альбом</th>
       <th style="text-align:left">Артист</th>
     </tr>
     <xsl:for-each select="catalog/cd">
     <tr>
       <td><xsl:value-of select="title" /></td>
       <td><xsl:value-of select="artist" /></td>
     </tr>
     </xsl:for-each>
   </table>
</xsl:template>

</xsl:stylesheet>
