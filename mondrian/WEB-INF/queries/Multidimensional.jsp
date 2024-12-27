
<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>

<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" jdbcUrl="jdbc:mysql://localhost:3306/aw_mekdi?user=root" catalogUri="/WEB-INF/queries/Multidimensional2.xml">
   select 
   {[Measures].[Unit Price], [Measures].[Line Total], [Measures].[Order Quantity]} ON COLUMNS,
   {([Vendor].[All Vendor], [Category].[All Categories], [Location].[All Locations])} ON ROWS
   from [Sales]
</jp:mondrianQuery>


