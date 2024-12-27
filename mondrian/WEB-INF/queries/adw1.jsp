<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/tugasakhirdwo?user=root&password=" catalogUri="/WEB-INF/queries/adw1.xml">

select {[Measures].[Order Total],[Measures].[Unit Price Total]} ON COLUMNS,
  {([Time].[All Times],[Product].[All Product],[Address].[All Address])} ON ROWS
from [SalesFact]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Query AdventureWorks Sales Fact using Mondrian OLAP</c:set>
