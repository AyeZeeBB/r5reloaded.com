/**
 * Class that handles the server list from https://ms.r5reloaded.com/servers
 */
class ServerListModel {
    /**
     * The URL to the server list
     * @type {string}
     */
    url = "./api/index.php";

    constructor() {
        this._servers = [];
        this.updateServerList();
    }

    /**
     * Setter for the server list
     * @returns {Array}
     */
    get servers() {
        return this._servers;
    }

    /**
     * Getter for the server list
     * @param {Array} value
     */
    set servers(value) {
        this._servers = value;
    }

    /**
     * Get the server list
     */
    async getServerList() {
        await this.updateServerList();
        return this.servers;
    }

    /**
     * Convert the map name to a readable name
     * @param {string} map 
     * @returns {string}
     */
    mapToName(map) {
        let names = {
            mp_rr_canyonlands_64k_x_64k: 'OG KC',
            mp_rr_canyonlands_mu1: 'KC S2',
            mp_rr_desertlands_64k_x_64k: 'World\'s Edge',
            mp_rr_desertlands_64k_x_64k_nx: 'WE After Dark',
            mp_rr_desertlands_64k_x_64k_tt: 'WE Mirage Voyage',
            mp_rr_canyonlands_mu1_night: 'S2 KC After Dark',
            mp_rr_canyonlands_staging: 'Firing Range',
            mp_rr_aqueduct: 'Overflow Arenas',
            mp_rr_aqueduct_night: 'Overflow After Dark',
            mp_rr_arena_skygarden: 'Encore Arenas',
            mp_rr_ashs_redemption: 'Ash\'s Redemption',
            mp_rr_arena_composite: 'Drop-Off'
        };

        if (names.hasOwnProperty(map)) {
            return names[map];
        }

        console.info("No conversion for ", map);

        return map;
    }

    /**
     * Update the server list
     * @returns {Array}
     */
    async updateServerList(url = this.url) {

        const response = await fetch(url, {
            method: 'POST', // *GET, POST, PUT, DELETE, etc.
            // mode: 'cors', // no-cors, *cors, same-origin
            // cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            // credentials: 'same-origin', // include, *same-origin, omit
            headers: {
                'Content-Type': 'application/json',
            },
            // redirect: 'follow', // manual, *follow, error
            // referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
            // body: data => JSON.stringify(data) // body data type must match "Content-Type" header
        });

        let data = await response.json();

        // if the server list is still empty, return an empty array
        if (!data.hasOwnProperty('servers')) {
            return null;
        }

        console.log(data);

        // convert the playlist to a human readable name
        data.servers.forEach(server => {
            server.map = this.mapToName(server.map);
        });

        return this.servers = data.servers;
    }

}