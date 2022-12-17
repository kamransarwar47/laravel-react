import {Navigate, Outlet} from "react-router-dom";
import {useStateContext} from "../contexts/ContextProvider.jsx";

export default function GuestLayout() {
  const {token} = useStateContext();
  if(token) {
    return <Navigate to="/dashboard"/>
  }

  return (
    <div>
      Guest Layout
      <Outlet/>
    </div>
  )
}
