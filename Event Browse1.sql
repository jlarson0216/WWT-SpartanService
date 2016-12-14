select e.SE_Name as 'Name', e.Description, e_time.StartTime, e_Time.EndTime, e_Time.Volunteers
from s_events e
join s_events_time e_time on e.SE_ID = e_time.SE_ID