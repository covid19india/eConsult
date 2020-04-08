import React, {useState, useEffect} from 'react';
import axios from 'axios';
import {formatDistance, format} from 'date-fns';
import * as Icon from 'react-feather';

// import {
//   formatDate,
//   formatDateAbsolute,
//   validateCTS,
// } from '../utils/common-functions';

// import Table from './table';
// import Level from './level';
// import MapExplorer from './mapexplorer';
// import TimeSeries from './timeseries';
// import Minigraph from './minigraph';

function Home(props) {
  // const [states, setStates] = useState([]);
  // const [stateDistrictWiseData, setStateDistrictWiseData] = useState({});
  // /* const [patients, setPatients] = useState([]);*/
  // const [fetched, setFetched] = useState(false);
  // const [graphOption, setGraphOption] = useState(1);
  // const [lastUpdated, setLastUpdated] = useState('');
  // const [timeseries, setTimeseries] = useState([]);
  // const [activityLog, setActivityLog] = useState([]);
  // const [timeseriesMode, setTimeseriesMode] = useState(true);
  // const [timeseriesLogMode, setTimeseriesLogMode] = useState(false);
  // const [regionHighlighted, setRegionHighlighted] = useState(undefined);
  // const [showUpdate,setShowUpdate] = useState(false);

  // useEffect(() => {
  //   if (fetched === false) {
  //     getStates();
  //   }
  // }, [fetched]);

  // const getStates = async () => {
  //   try {
  //     const [
  //       response,
  //       stateDistrictWiseResponse,
  //       updateLogResponse,
  //     ] = await Promise.all([
  //       axios.get('https://api.covid19india.org/data.json'),
  //       axios.get('https://api.covid19india.org/state_district_wise.json'),
  //       axios.get('https://api.covid19india.org/updatelog/log.json'),
  //     ]);
  //     setStates(response.data.statewise);
  //     setTimeseries(validateCTS(response.data.cases_time_series));
  //     setLastUpdated(response.data.statewise[0].lastupdatedtime);
  //     setStateDistrictWiseData(stateDistrictWiseResponse.data);
  //     setActivityLog(updateLogResponse.data);
  //     /* setPatients(rawDataResponse.data.raw_data.filter((p) => p.detectedstate));*/
  //     setFetched(true);
  //     setShowUpdate(true)
  //   } catch (err) {
  //     console.log(err);
  //   }
  // };

  // const onHighlightState = (state, index) => {
  //   if (!state && !index) setRegionHighlighted(null);
  //   else setRegionHighlighted({state, index});
  // };
  // const onHighlightDistrict = (district, state, index) => {
  //   if (!state && !index && !district) setRegionHighlighted(null);
  //   else setRegionHighlighted({district, state, index});
  // };

  return (
    <React.Fragment>
      <div className="Home">
        <div className="home-left">
          <div className="header fadeInUp" style={{animationDelay: '1s'}}>
            <div className="header-mid">
              <div className="titles">
                <div className="home-card">
                  <img className="fadeInUp" src="/econsult_background.png" alt="eConsult"/>
                  <div className="home-card-container">
                    <h2>consultation</h2>
                    <a
                      className="button econsult-button"
                      href="#"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <Icon.Play />
                      <span>click here to Start&nbsp;</span>
                    </a>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>

        
        <div className="home-right">
          <div className="header fadeInUp" style={{animationDelay: '1s'}}>
            <div className="header-mid">
              <div className="titles">
                <div className="home-card">
                    <img className="fadeInUp" src="/econsult_superdocs.png" alt="econsult_superdocs"/>
                    <div className="home-card-container">
                    <h2>Doctor Registration</h2>
                    <a
                      className="button econsult-button"
                      href="#"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      <Icon.Navigation />
                      <span>Register&nbsp;</span>
                    </a>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </React.Fragment>
  );
}

export default Home;
