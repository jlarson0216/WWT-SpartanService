select u.FirstName, u.LastName, u.Email, u.Phone, a.A_Name as 'AddressName', a.Street, a.City, a.Zip
from users u
join address a on a.A_ID = u.A_ID
where ISNULL(u.date_deleted)